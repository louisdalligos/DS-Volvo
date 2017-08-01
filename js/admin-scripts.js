(function($) {

  $(document).ready(function() {
    $('button#cta_bg_img').click(function (e) {
      e.preventDefault();

      var imageUploader = wp.media({
        'title' : 'Upload CTA Box Background Image',
        'button' : {
          'text' : 'Set background'
        },
        'multiple' : false
      });

      imageUploader.open();

      imageUploader.on('select', function(){
        var image = imageUploader.state().get('selection').first().toJSON();
        var link = image.url;

        $('input.cta_bg_link').val(link);
        $('.image_show img').attr('src', link);
      });
    });
  });

}(jQuery))
