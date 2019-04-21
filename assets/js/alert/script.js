const flashData = $('.flash-data').data('flashdata');

if( flashData ) {
	Swal({
		title: 'Berhasil',
		text: flashData,
		type: 'success'
	})	
}

const flashUbah = $('.flash-ubah').data('flashdata');
if( flashUbah ) {
	Swal({
		title: 'Berhasil',
		text: flashUbah,
		type: 'success'
	})	
}

// tombol hapus
$('.tombol-hapus').on('click', function(e) {
	e.preventDefault();
	const href = $(this).attr('href');

	Swal({
	  title: 'Apakah Anda Yakin?',
	  text: "Data Ini Akan Dihapus",
	  type: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Ya, Hapus Data!'
	}).then((result) => {
	  if (result.value) {

	     document.location.href = href;

	  }
	})
})

// tombol logout
$('.tombol-logout').on('click', function(e) {
	e.preventDefault();
	const href = $(this).attr('href');

	Swal({
	  title: 'Apakah Anda Yakin Ingin Logout?',
	  text: "Anda Akan Logout Dari Akun Ini",
	  type: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Ya, Logout!'
	}).then((result) => {
	  if (result.value) {

	     document.location.href = href;

	  }
	})
})
