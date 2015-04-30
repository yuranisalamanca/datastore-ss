$(document).ready(function(){
	$('.nav').on('click', '.link_tutorial', function(event) {
        if ($('.active').length) {
            $('.link_tutorial').removeClass('active');
        }

        $(this).addClass('active');
    });

	$('#link_drive').click(function(event) {
        event.preventDefault();
        link(' <?php echo base_url();?> application/views/SPA-infoDrive/infoDrive.php', '.hero-unit');
    });

    $('#link_dropbox').click(function(event) {
        event.preventDefault();
        link('SPA-infoDropbox/infoDropbox.php', '.hero-unit');
    });

    $('#link_mega').click(function(event) {
        event.preventDefault();
        link('SPA-infoMega/infoMega.php', '.hero-unit');
    });
})