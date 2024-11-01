<?php

class smartlink_du_front{

	// user data stored in DDBB
	protected $user_data;
	// client IP
	protected $user_ip;
	// sandbox array of user data
	protected $linksand=[];
	// the final array were we store URLS and settings of metabox
	protected $link_arr=[];
	// the URL data that will be inserted in link
	protected $link_win;
	// number of URLS/data inserted in metabox
	protected $num_urls;
	
	public function smrtdu_fstart(){
 
		//   set hook for shortcode
		add_shortcode( 'smartlink', array( $this, 'shortcode' ) );
		
	}	

	public function shortcode($atts, $content = null){		
		
		# Get post ID
		$url = get_permalink();
		$post_id=url_to_postid($url);

		# Get data from DDBB
		$metdat_post = maybe_unserialize(get_post_custom($post_id));

		if(!array_key_exists('smartlink-1',$metdat_post)) return;
		$user_data = $metdat_post['smartlink-1'];

		for ($rt=0; $rt < count($user_data); $rt++) { 
				$rest_data = maybe_unserialize($user_data[$rt]);	
		}

		# GET BACK OPS
		$rsback_ops=maybe_unserialize(get_option('back-ops'));
		$default_url=$rsback_ops[0];
		$defgt_url=$rsback_ops[1];


		// GT - DISABLE ON LOCALHOST 
 
		function getRealIP() {

	        if (!empty($_SERVER['HTTP_CLIENT_IP']))
	            return sanitize_text_field(wp_unslash($_SERVER['HTTP_CLIENT_IP']));
	           
	        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
	            return sanitize_text_field(wp_unslash($_SERVER['HTTP_X_FORWARDED_FOR']));  

	        if(isset( $_SERVER['REMOTE_ADDR'])){
				return sanitize_text_field(wp_unslash($_SERVER['REMOTE_ADDR']));
			} 
		}

		$miip = getRealIP(); 
	    //Get Country Code / Call to API
	    $url = 'http://ip-api.com/json/'.$miip;
		$codeCountry = '';
		$dataReq = array();

		$res = wp_remote_get($url);
		
		if( json_decode($res['body'])->status != 'fail' )
		{		 
			$codeCountry  = json_decode($res['body'])->countryCode;
		}
	 
		// enable on localhost
		//$codeCountry = 'Your Country code here';
	
		// DEFAULT VALUES //
		# GT Off
		$gt_match=false;
		# no gt urls
		$nogt_count=0;		
		# default URL		
		if($default_url==NULL||empty($default_url)){
			$def_arr=array(array("#","","",""));
		}
		else{
			$def_arr=array(array($default_url,"","",""));
		}		
		# default GT URL
		if($defgt_url==NULL||empty($defgt_url)){
			$defgt_arr=array(array("#","","",""));
		}
		else{
			$defgt_arr=array(array($defgt_url,"","",""));
		}	
		// END DEFAULT VALUES //


		// BUILD SMARTLINK //

		
		# how many URLS are ? = $ this->num_urls ///  clean empty urls = $ this->linksand
		for ($wap=0; $wap < count($rest_data); $wap++) { 
			if(!empty($rest_data[$wap][0])){
				array_push($this->linksand,$rest_data[$wap]);
				$this->num_urls++;
			}
		}

		# look for GT match/ if true=store in final array = this->link_arr && turn gt ON
		for ($wup=0; $wup < count($this->linksand); $wup++) { 
			# There is match / push to array	
			if($this->linksand[$wup][3]==$codeCountry){				
				array_push($this->link_arr,$this->linksand[$wup]);		
				$gt_match=true;	
				$nogt_count++;				
			}				
		}

		# There is no match / GT is still Off by default
		if($gt_match==false){
			for ($wip=0; $wip < count($this->linksand); $wip++) { 				
					if($this->linksand[$wip][3]=='false'){
					array_push($this->link_arr,$this->linksand[$wip]);	
					$nogt_count++;						
					}
			}
			# All URLS set for GT // no GT match // default GT url
			if( $nogt_count==0){				
				for ($wop=0; $wop < count($this->linksand); $wop++) { 
					# URL with no GT exists
					if(!empty($this->linksand[$wop][0])){
						$this->link_arr=$defgt_arr;				
					}
				}				
			}
			# default array / No urls entered (!)
			if(empty($this->link_arr)){
				$this->link_arr=$def_arr;
			}		
		}
		# winner URL 		
		$rnd_key=array_rand($this->link_arr);
		# Build link
		# rest_data[0]= URL
		# rest_data[1]=NoFollow
		# rest_data[2]=Target_blank
		# rest_data[3]=GeoTargeting
	

		# Build link with attrs
		// set variable for nofollow and target blank
		if($this->link_arr[$rnd_key][1]=="on"&&$this->link_arr[$rnd_key][2]=="on"){
			$smrtduchkval='target="_blank" rel="nofollow noopener noreferrer"';
		}
		elseif($this->link_arr[$rnd_key][1]=="on"&&$this->link_arr[$rnd_key][2]==""){
			$smrtduchkval='rel="nofollow"';
		}
		elseif($this->link_arr[$rnd_key][1]==""&&$this->link_arr[$rnd_key][2]=="on"){
			$smrtduchkval='target="_blank" rel="noopener noreferrer"';
		}
		else{
			$smrtduchkval='';
		}
		return '<a href="'.$this->link_arr[$rnd_key][0].'" '.$smrtduchkval.'>'.$content.'</a>';		
	# end shortcode
	}
# end class	
}