<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">test</div>
                    <div class="panel-body">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
	new Vue({
		el: 'dico',
		data: {
			color: ''
			value :''
		},
		ready :function(){
			this.getColor();
		},
		method: {
			getColor : function() {
				$.ajax({
					context: this,
					url: "http://localhost:8000/api/test",
				})
			}
		}

	});
</script>script>