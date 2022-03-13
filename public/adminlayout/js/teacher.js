
function del(v) {
    var chk =v.value;
    Swal.fire({
        title: 'Are you sure?',
        text: "You want to delete this teacher!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url:newurl,
                data:{
                    'id':chk,
                },
                method: "GET",
                success: function(data) {
                    console.log(data);
                    if(data.status == 1) {
                        Swal.fire(
                            'Deleted!',
                            'Teacher has been deleted successfully.',
                            'success'
                        )
                        location.reload();
                    }
                    else {
                        Swal.fire(
                            'Deleted!',
                            'Teacher has not been deleted !',
                            'error'
                        )
                    }
                }
            });
        }
    })
}


