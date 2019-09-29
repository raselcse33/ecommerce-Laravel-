//edit and update category
$(document).on("click","#customerEdit",function(arg){
 arg.preventDefault();
 var id = $(this).data("id");
 var url = $(this).attr("href");

 $.ajax({
  url: url,
  data: {'id':id},
  dataType:"JSON",
  type: "GET",
  success(response){
   $("#editaddCetagory").modal("show");
   $("#category_name").val(response.category_name);
   $("#category_id").val(response.id);
 }
})
});

$("#updateCategory").on("submit",function(arg){
  arg.preventDefault();
  var form =$(this);
  var url = form.attr("action");
  var type = form.attr("method");
  var data = form.serialize();
  $.ajax({
   url: url,
   type: type,
   dataType: "JSON",
   data: data,
   success: function(response){
    if(response == "success"){
     $("#editaddCetagory").modal("hide");
     $("#categoryTable").load(" #categoryTable");
     $("#subCategoryTable").load(" #subCategoryTable");
     // $("#categoryTable").load(" #categoryTable");
      window.location.reload();
     alert('success');
   }
 }
})
});

//end edit and update category

//start edit and update sub category

$(document).on("click","#edit_sub_category",function(arg){
 arg.preventDefault();
 var id = $(this).data("id");
 var url= $(this).attr("href");
 
 $.ajax({
  url: url,
  data: {'id':id},
  dataType:"JSON",
  type:"GET",
  success(response){
    $("#editaddSubCetagory").modal("show");
    $("#sub_category_name_id").val(response.sub_category_name);
    $("#category_ids").val(response.category_id);
    $("#hidden_sub_category_id").val(response.id);
  }
})
});

$("#updateSubcategory").on("submit",function(arg){
 arg.preventDefault();
 var form =$(this);
 var url = form.attr("action");
 var type = form.attr("method");
 var data = form.serialize();

 $.ajax({
  url: url,
  type: type,
  dataType: "JSON",
  data: data,
  success: function(response){
    if(response == "success"){
      $("#editaddSubCetagory").modal("hide");
      $("#subCategoryTable").load(" #subCategoryTable");
      window.location.reload();
      alert('success');
    }
  }
})

});
//end edit and update sub category

//start sub sub category
// function get_sub_category(sub_category_id){
//       var id = sub_category_id;
//       $.ajax({
//           url: SITE_URL+'/get-sub-category/'+id,
//           //data:{'id':sub_category_id},
//           //dataType:"JSON",
//           type:"GET",
//           success(response){
//             var data = JSON.parse(response);
//             //console.log(data['sub_category_name']);

//             $("#subs_category_id").empty();

//             $("#subs_category_id").append('<option value="'+data['id']+'">'+data['sub_category_name']+'</option>');
//       },
//       error(err){
//             console.log(err);
//       }
// })
// }


//start edit and update sub sub category
$(document).on("click","#edit_sub_sub_category",function(arg){
  arg.preventDefault();
  $("#main_categoryId").val('');
  $("#subs_category_id").val('');

  var id = $(this).data("id");
  var url = $(this).attr("href");
  $.ajax({
    url:url,
    data:{'id':id},
    dataType:"JSON",
    type:"GET",
    success(response){
      $("#editaddSubSubCetagory").modal("show");
      $("#main_categoryId").val(response.category_id);
      $("#sub_sub_category_id").val(response.sub_sub_category_name);
      $("#hidden_sub_sub_category").val(response.id);
      $("#subs_category_id").val(response.sub_category_id);

            //get_sub_category(response.sub_category_id);
          }
        })
});

// $(document).on("click","#close",function(arg){
//   alert("ok");
//   $("#main_categoryId").val('');
//   $("#subs_category_id").val('');
//   $("#editaddSubSubCetagory").modal("hide");
//   window.location.reload();
// });

$("#updateSubSubCategory").on("submit",function(arg){
 arg.preventDefault();
 var form =$(this);
 var url = form.attr("action");
 var type = form.attr("method");
 var data = form.serialize();
 console.log(url);

 $.ajax({
  url: url,
  type: type,
  dataType: "JSON",
  data: data,
  success: function(response){
    if(response == "success"){
                  // $("#main_categoryId").val('');
                  // $("#subs_category_id").val('');
                  $("#editaddSubSubCetagory").modal("hide");
                  $("#subSubCategoryTable").load(" #subSubCategoryTable");
                  alert('success');
                }
              }
            })

});


//end edit and update sub sub category

