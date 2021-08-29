<template>
<div>
	<h1>memo一覧</h1>
	<ul>
		<li 
      v-for="memo in tasks" 
      v-text="memo.title" 
    ></li>
	</ul>
</div>
</template>

<script>
  export default {
    data: function () {
          return {
              tasks: [],
          }
      },
    created(){
			axios.get('/api/tasks')
				.then(response => {
					this.tasks = response.data.memos;
				})
				.catch(error => {
					console.log(error)
				});
		} 
  }
</script>