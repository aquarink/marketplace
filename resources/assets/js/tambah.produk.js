$(document).ready(function() {

	$("#inputProdukStok").hide();
	
	$('input[type=radio][name=produkStok]').change(function() {
        if (this.value == 'terbatas') {
            $("#inputProdukStok").show();
        }
        else {
            $("#inputProdukStok").hide();
        }
    });
});