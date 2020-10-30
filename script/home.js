$(document).ready(function () {
    init()
});

var init = function(){
  $('.open-img').click(function(){
    openImg(this)
  })
}

function openImg(element){
  let img = $(element).find('img')
  let html = 
  '<div class="modal" tabindex="-1" role="dialog" id="img_zoom">'+
    '<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">'+
      '<div class="modal-content">'+
        '<div class="modal-header">'+
          '<h5 class="modal-title"></h5>'+
          '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
            '<span aria-hidden="true">&times;</span>'+
          '</button>'+
        '</div>'+
          '<img src="'+ $(img).attr('src') +'" class="ob-fit-contain">'+
      '</div>'+
    '</div>'+
  '</div>';
  $('#img_zoom').remove()
  $('body').append(html)
  $('#img_zoom').modal('show')
}
