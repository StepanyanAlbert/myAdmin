
$(window).load(function () {
    //$(".phpMyAdmin").draggable({axis:"x"});
    //$(".phpMyAdmin").resizable()
    //  $("body").find(".header_big_div").draggable({axis:"x"});
    //  $(".header_big_div").resizable();
    $(".icon_refresh").click(function () {
        $.ajax({
            url: "../select.php",
            type: "POST",
            data: "select_databases",
            beforeSend: function(){
                $('#loading').show();
            },
            success: function foo(s) {
                $(".second_php_myAdmin").empty().append(s);

            },
            complete:function(){
                $('#loading').hide();
            }
        });
    });
    $.ajax({
        url: "../select.php",
        type: "POST",
        data: "select_databases",
        beforeSend: function(){
            $('#loading').show();
        },
        success: function foo(s) {
            $(".second_php_myAdmin").html(s)
        },
        complete:function(){
            $('#loading').hide();
        }

    });

    $("body").on("click",".create_new_table_span",function (event){
        event.stopPropagation();
        $db_name=$(this).closest('.database_name').find('.dat_name').text();
       switch ($db_name){
           case "mysql":
           case "phpmyadmin":
           case "performance_schema":
           case "information_schema":{alert("This is a system databse");};break;

           default:{
               $(this).closest('.database_name').css("background","#D9D9D9");

               $.ajax({
                type:"GET",
                url:"../create_table.php",
                   beforeSend: function(){
                       $('#loading').show();
                   },
                data:{db_name:$db_name},
                   success:function(response){
                       $(".general_settings").html(response)
                   },
                   complete:function(){
                       $('#loading').hide();
                   }
               })
           };break;
       }

    }) ;
    $("body").on("click",".table_names",function (event){
        event.stopPropagation();


    })

    $("body").on("click",".reload",function(){
        location.reload();
    });
    $("body").on("click",".button_go",function(){

        $table_name=$(".table_name_new_created").val();
        $table_row=$(".number_table_rows").val();
        $.ajax({
            url:"../second.php",
            data:{table_name:$table_name,
                     row_quant:$table_row},
            beforeSend: function(){
                $('#loading').show();
            },
            success:function(s) {
            $(".general_settings").html(s)
        },
            complete:function(){
                $('#loading').hide();
            }
        });

        $("#table_name").html($table_name);

    });
    $("body").on("click", "#create_new_base", function () {
        $.post("default.html", "new", function (date) {
           $(".general_settings") .html(date)
        });
        $.ajax({
            type:"GET",
            url:"../select.php",
            beforeSend: function(){
                $('#loading').show();
            },
            data:{total_count_databases:22},
            success:function(data_count_databases){
                $(".total_countOf_daabases").append(data_count_databases);
            },
            complete:function(){
                $('#loading').hide();
            },
        });
        $.ajax({
            type:"GET",
            url:"../select.php",
            data:{select_db_char:"1"},
            beforeSend: function(){
                $('#loading').show();
            },
            success:function(result){
                $(".table").append(result);
                $("#table_database").DataTable({
                    "bLengthChange": false,
                    "bPaginate": false,
                    "bFilter": false,
                    "bInfo": false,
                    "bAutoWidth": false,
                });
            },
            complete:function(){
                $('#loading').hide();
            },
        });
    });

    $("body").on("click",".database_name", function (event) {
           $this = $(this);
            $first = $this.children(":first");
            $last = $this.children(":last");

            if ($first.attr("class") !== "minus_sign fa fa-minus-circle") {
                $first.attr("class", "minus_sign fa fa-minus-circle");
                $databas_name = $(this).text();
                $.ajax({
                    type: "GET",
                    url: "../select.php",
                    beforeSend: function(){
                        $('#loading').show();
                    },
                    data: {database_name: $databas_name},
                    success: function (data) {
                        $last.append("<div class='create_new_table'><i class='fa  fa-pencil'><span class='create_new_table_span'>New</span></i></div>" + "<span class='table_names_from_database'>" + data + "</span>");
event.preventDefault();
                    },
                    complete:function(){
                        $('#loading').hide();
                    }
                });

            } else {
                $last.children().remove()
                $first.attr("class", "plus_sign fa fa-plus");
                event.preventDefault();
            }
         });
        $("body").on("click",".button_create_database",function(e){
            if(($(".created_database_name").val())==""||$(".created_database_name").val()==" "){
                alert("Database name is not selected");
                $(this).off(e)
            }
            else{
                $input_name=$(".created_database_name").val();
                $char_set=$(".select_db_collation").val();
            $.ajax({
               type:"GET",
                url:"../select.php",
                beforeSend: function(){
                    $('#loading').show();
                },
                data:{input_name:$input_name,
                    collation_name:$char_set},
                success:function(response){
                 $(".general_settings").empty();
                    $(".general_settings").append(response);
                    $.ajax({
                        url: "../select.php",
                        type: "POST",
                        data: "select_databases",
                        success: function foo(s) {
                            $(".second_php_myAdmin").empty().append(s);
                        },
                        complete:function(){
                            $('#loading').hide();
                        },
                    });

                }
            });}

            });

    $("body").on("click",".button_preview_save",function(ev){

        $char_type=$("#field_lenght").val();
        alert($char_type);
       $field_type=$(".select_from_table").val();
        $name=$("#table_name").val();
        $field_name=$(".table_field_name").val();
        if($name!=="" && $name!==" "){
          if($field_name!=="" && $field_name!==" "){

              //$.ajax({
              //    type:"POST",
              //    url:"../create_table.html",
              //    data:{},
              //})
          }else{
              alert("Missing value in the form!!!")
              ev.preventDefault();
          }
        }else{
            alert("Table name shouldn't be empty!!!");
            ev.preventDefault();
        }
    })
 $("body").on("click","#create_table_finally",function(){
     $column_quant=$("#add_columns").val();

   $.post("../second.php",{add_columns:$column_quant},function (response){
      $("#required_div_input_quantr").html(response);
    })
 });

    $("body").on("mouseover","#hovering_div_inside",function(foo){
        if($(this).prev().attr("class")!=="minus_sign fa fa-minus-circle"){
        $(this).parent().css("background","#D9D9D9");}else {
            foo.preventDefault();
        }
    });
    $(".background_hover").mouseover(function () {
        $(this).css("background", "#D9D9D9");
    })
    $(".background_hover").mouseout(function () {
        $(this).css("background", "white");
    });
    $("body").on("mouseout","#hovering_div_inside",function(){
        $(this).parent().css("background","#F3F3F3");
    });
    $("body").on("mouseover",".result_data",function(){
        $(this).css("background","#D9D9D9");
    });
    $("body").on("mouseout",".result_data",function(){
        $(this).css("background","#F3F3F3");
    });
    $("body").on("mouseover","#mouseover_table_row",function(){
        $(this).css("background","#D9D9D9");
    });
    $("body").on("mouseout","#mouseover_table_row",function(){
        $(this).css("background","white");
    });
    $("body").on("mouseover","#required_div_input_quantr tr",function(){
        $(this).css("background","#D9D9D9");
    });
    $("body").on("mouseout","#required_div_input_quantr tr",function(){
        $(this).css("background","white");
    });
});




