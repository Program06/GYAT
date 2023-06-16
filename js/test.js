// Janky JS is for demo purposes only
// The WordPress plugin this is demoing handles all JS

// To customize the spinner images, PHP hooks are provided in the plugin
var spinner = 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/20807/loading-small-purple.gif';
var spinner_active = 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/20807/loading-small-green.gif';

$(document).on('click', '.simplefavorite-button', function(e){
  e.preventDefault();
  simulateLoading($(this));
});

function simulateLoading(button){
  var html = '<img src="' + spinner + '">';
  if ( $(button).hasClass('active') ){
    html = '<img src="' + spinner_active + '">';
  }
  $(button).addClass('loading').html(html);
  setTimeout(function(){
    if ( $(button).hasClass('active') ){
      unfavorite(button);
    } else {
      favorite(button);
    }
  }, 1000);
}

function favorite(button){
  var html = '<span class="text">Unfavorite</span><i class="fa fa-heart"></i> <span class="simplefavorite-button-count">2</span>';
  $(button).removeClass('loading').addClass('active').html(html);
}

function unfavorite(button){
  var html = '<span class="text">Favorite</span><i class="icon-star-empty"></i> <span class="simplefavorite-button-count">1</span>';
  $(button).removeClass('loading').removeClass('active').html(html);
}