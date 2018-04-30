/**
 * Stop an iframe or HTML5 <video> from playing
 * @param  {Element} element The element that contains the video
 */
var DFD_VideoModule = DFD_VideoModule || {};
(function($){
	var VideoModule_VimeoPlayer = function(iframe){

		DFD_VideoModule.addScriptToHead();

		var iframeEl = iframe;
		play = function(){
			var player = $f(iframeEl[0]);
			player.api("play");
			player.addEvent('ready', function(){
				player.api("play");
			});
		};
		stop = function(){
				$(iframeEl[0]).remove();
		};
		setIframe = function(id){

			iframeEl = id;
		};
		var public = {
			setIframe: setIframe,
			play: play,
			stop: stop
		};
		return public;
	};
	var VideoModule_YoutubePlayer = function(iframe){
		var iframeEl = iframe;

		play = function(){
			iframeEl[0].src += '&autoplay=1';
		};
		stop = function(){
		};
		setIframe = function(id){
			iframeEl = id;
		};
		var public = {
			setIframe: setIframe,
			play: play,
			stop: stop
		};
		return public;
	};

	DFD_VideoModule = {
		addToHad: false,
		block_id: "",
		id: "",
		$video_container: "",
		iframe: [
		],
		player: [
		],
		addScriptToHead: function(){
			if(this.addToHad) {
				return false;
			}
			var tag = document.createElement('script');
			tag.src = "https://f.vimeocdn.com/js/froogaloop2.min.js";
			tag.id = "dfd-vimeo-api-script";
			var firstScriptTag = document.getElementsByTagName('script')[0];
			firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
			this.addToHad = true;
		},
		getTypePlayer: function(href, iframe){
			if(!href || href == '' || href == '#'){
				console.log('No valid video url were added in Video module settings. Please specify the valid video url');
				return;
			}

			var isVimeo = href.search("player.vimeo.com");
			if(isVimeo >= 0){
				this.player["#" + this.id] = new VideoModule_VimeoPlayer(iframe);
			} else {
				this.player["#" + this.id] = new VideoModule_YoutubePlayer(iframe);
			}
		},
		init: function(id, block_id){
			this.id = id;
			this.block_id = block_id;
			this.iframe["#" + id] = $("#" + id).find("iframe");

			var url = $(this.iframe["#" + id]).attr("src");
			if(!$("#" + this.block_id + " a.dfd-video-link").length) {
				this.getTypePlayer(url, this.iframe["#" + id]);
			}
			this.addEvents();
		},
		addEvents: function(){
			var self = this;
			$("#" + this.block_id + " a.dfd-video-image-thumb").on("click", function(e){
				e.preventDefault();
				id = $(this).attr("href");
				$(this).parent().addClass('active');
				self.player[id].play();

			});
		}
	};

})(jQuery)
