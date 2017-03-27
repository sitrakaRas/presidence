var presidence = {
	slider: function(parent,arg){
        parent.slick(arg);
    }
}

var arg = {
	slidesToShow: 1,
	slidesToScroll: 1,
	dots: true,
	arrows : true,
	autoplay : true,
	autoplaySpeed: 5000
};
presidence.slider($('.slider-top'), arg);