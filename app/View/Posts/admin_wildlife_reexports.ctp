<div class="col-lg-12">
 <h1>WILDLIFE RE-EXPORT CERTIFICATION</h1>
 <h2>Search</h2>
 <input type="text" class='form-control' id='search'>
</div>

<div class="col-lg-12" id='wew'>
</div>


<script type="text/javascript">
  $(document).ready(function(){

  	$('#search').keyup(function(){
  		$.ajax({
  			
  			url:window.location.origin+'/admin/posts/wildlifereexportajax/'+$('#search').val(),
			success:function(result){
				$('#wew').html(result);
  			}
  		});
  	});

  });
</script>