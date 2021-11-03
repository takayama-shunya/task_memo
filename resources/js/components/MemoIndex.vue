<template>
<div>
	<h1>memo一覧</h1>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th class="">タイトル</th>
				<th class="">作成日</th>
				<th class="">内容</th>
				<th class=""></th>
			</tr>
		</thead>
		<tbody>
			<tr v-for="(memo, index) in tasks" :key=index >
				<td>{{ memo.title }}</td>
				<td>{{ memo.created_at | moment }}</td>
				<td>{{ memo.content }}</td>
			</tr>
		</tbody>
	</table>
</div>


</template>

<script>
  import moment from "moment"
  export default {
		filters: {
        moment: function (date) {
            return moment(date).format('YYYY/MM/DD HH:mm');
        }
    },
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
		},
  }
</script>