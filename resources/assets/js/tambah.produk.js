// ANGULARJS START

// // DISABLED SUBMIT
var app = angular.module('Marketplace', []);

app.controller('MainCtrl', function($scope) {
	$scope.minPesanProduk = 1;
	$scope.hargaSatuanProduk = 0;
	$scope.stokProduk = "stokProdukTersedia";
	$scope.beratProduk = 100;
	$scope.kondisiProduk = "kondisiProdukBaru";
	$scope.asuransiProduk = "asuransiProdukOptional";
});
// ANGULARJS END



$(document).ready(function() {

	 // IMAGE PRODUCT SELECT
	$('#pilihGambarProduk').click(function(e) {  
      	$('#triggerGambarProduk').trigger('click');
    });

    $("#triggerGambarProduk").on("change",function(e) {
    	var input = document.getElementById('triggerGambarProduk');
   		
   		if(input.files.length == 0){
		 	$('#submitProduk').attr('disabled', true);
	 	} else if(input.files.length > 5) {
	 		$('#submitProduk').attr('disabled', true);
	 		alert('Maksimal 5 gambar')
 		} else {
 			$('#submitProduk').attr('disabled', false);
	 		var files = e.target.files ,
		 	filesLength = files.length ;
		 	for (var i = 0; i < filesLength ; i++) {
		 		var f = files[i]
		 		var fileReader = new FileReader();
		 		fileReader.onload = (function(e) {
		 			var file = e.target;
		 			// IMAGE SHOW
	 				$("<img></img>",{
		 				class : "col-md-2 col-sm-2",
		 				style : "padding-left:0px",
		 				src : e.target.result,
		 				title : file.name
		 			}).insertAfter("#previewGambarProduk");
	 			});
		 	fileReader.readAsDataURL(f);
		 	}
	 	}
	});

	$("#inputProdukStok").hide();
	
	$('input[type=radio][name=stokProduk]').change(function() {
		if (this.value == 'stokProdukTerbatas') {
			$("#inputProdukStok").show();
		}
		else {
			$("#inputProdukStok").hide();
		}
	});

	// SUBMIT
	$("#submitProduk").click(function(e) {

		var formData = new FormData();

		formData.append('namaProduk', $("#namaProduk").val());
		formData.append('kategoriProduk', $("#kategoriProduk").val());

        for (var i = 0, len = document.getElementById('triggerGambarProduk').files.length; i < len; i++) {
            formData.append("gambarProduk" + i, document.getElementById('triggerGambarProduk').files[i]);
        }

		formData.append('minPesanProduk', $("#minPesanProduk").val());
		formData.append('hargaSatuanProduk', $("#hargaSatuanProduk").val());
		formData.append('stokProduk', $('input[name=stokProduk]:checked').val()); 
		formData.append('inputStokProdukTerbatas', $("#inputStokProdukTerbatas").val());
		formData.append('kondisiProduk', $('input[name=kondisiProduk]:checked').val());
		formData.append('deskripsiProduk', $("#deskripsiProduk").val());
		formData.append('satuanBeratProduk', $("#satuanBeratProduk").val());
		formData.append('beratProduk', $("#beratProduk").val());
		formData.append('asuransiProduk', $('input[name=asuransiProduk]:checked').val());

		// MODALS
		$('#loadingSendProdukBaru').modal({backdrop: 'static', keyboard: false,});

		$.ajax({
			url : baseUrl + "produk/tambah/baru",
			type : "POST",
			data : formData,
			processData: false,
    		contentType: false,
			success: function(sData,sStatus,sXHR) {
				console.log(sData);
			}, error: function(eXHR, eStatus, eReport){
		       console.log(eReport);
		    }
    	});
	});
});

