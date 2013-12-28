<!--
$(function(){
	var playItem = 0,
		title=$('.jp-interface .jp-title'),
		jPlayer=$("#jplayer"),
		myPlayList = [
			{name:"La Dama",mp3:"audio/ladama.mp3"},
			{name:"Nueva Tinta",mp3:"audio/nuevatinta.mp3"},
			{name:"Ausente",mp3:"audio/ausente.mp3"},
			{name:"Una Flor",mp3:"audio/unaflor.mp3"},
			{name:"Hoy",mp3:"audio/hoy.mp3"},
			{name:"Saber Avanzar",mp3:"audio/saberavanzar.mp3"},
			{name:"Sueño Letal",mp3:"audio/suenoletal.mp3"},
			{name:"Mi Guía",mp3:"audio/miguia.mp3"},
			{name:"Dejate Llevar",mp3:"audio/dejatellevar.mp3"},
			{name:"Estás Pensando",mp3:"audio/estaspensando.mp3"},
			{name:"Soldados de Cray&ampon",mp3:"audio/soldadosdecrayon.mp3"}
		],		
		jPlay=function(idx){
			if(typeof idx==typeof 0)
				jPlayer.jPlayer("setMedia",myPlayList[idx])
			if(typeof idx==typeof '')
				jPlayer.jPlayer("setMedia",myPlayList[playItem=idx=='next'?(++playItem<myPlayList.length?playItem:0):(--playItem>=0?playItem:myPlayList.length-1)])				
			title.text(myPlayList[playItem].name)
			Cufon.refresh()
		}

	jPlayer.jPlayer({
		ready: function() {
			jPlay(playItem)
		},
		ended:function(){
			jPlay('next')
			jPlayer.jPlayer('play')
		}
	})
	
	$(".jp-prev,.jp-next")
		.click( function() { 
			jPlay($(this).is('.jp-next')?'next':'prev')
			jPlayer.jPlayer('play')
			return false;
		})
	
});
-->