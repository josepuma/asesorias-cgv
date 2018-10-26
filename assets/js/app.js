require('../css/app.scss');

$(document).ready(function(){

  $('#main-container').imagesLoaded( function() {
      $('#main-container').addClass('visible');
      $('.loader').addClass('hidden');

      var ppWaypoint = $('.img-overlay').waypoint(function(direction) {
            //check the direction
            if(direction == 'down') {
                //add the class to start the animation
                $(this.element).addClass('collapsed');
                //then destroy this waypoint, we don't need it anymore
                this.destroy();
            }
        }, {
            //Set the offset
            offset: '80%'
        });


        $('.animated-title span').addClass('visible');

  });

  UIkit.util.on(document, 'inview', '.img-overlay', function() {
	  /// $(event.target).addClass('collapsed');
     console.log($(event.target));
});

$('.img-overlay').on('inview', function(e){
  console.log('i reacted');
});

$('.transition-website').click(function(){
  $('#main-container').removeClass('visible');
});

});
