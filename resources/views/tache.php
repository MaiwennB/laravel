<h1>Hello world !</h1>


<h1>Liste des Thèmes</h1>

<select name="year_subject" id="year_subject">

  <option value="theme1">theme1</option>

  <option value="theme2">theme2</option>

  <option value="theme3">theme3</option>

  <option value="theme4">theme4</option>

</select>



<script>

  $('#year_subject').change(function(){



    var posting = $.post( "gettest", { option: $('#year_subject').val() } );



        posting.done(function( data ) {


            for (var d in data){

                        $('#themes').append('<option value="' + d + '">' + data.datas[d] + '</option>');

                    }},

        });



  });

</script>

