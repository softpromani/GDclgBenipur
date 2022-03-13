$(document).ready(function(){
    $("#uploadfile").hide();
    $("#uploadlink").hide();
      $("#filetype").click(function(){
        $("#uploadfile").show();
        $("#uploadlink").hide();
      });
      $("#linktype").click(function(){
        $("#uploadlink").show();
        $("#uploadfile").hide();
      });


});

function delnotice(v) {
    var chk =v.value;
    Swal.fire({
        title: 'Are you sure?',
        text: "You want to delete this notice!",
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
                            'Your notice has been deleted.',
                            'success'
                        )
                        location.reload();
                    }
                    else {
                        Swal.fire(
                            'Deleted!',
                            'Your notice has not been deleted.',
                            'error'
                        )
                    }
                }
            });
        }
    })
}


