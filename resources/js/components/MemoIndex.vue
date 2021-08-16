<template>
<div class="container">
  <div>
    <router-link v-bind:to="{name: 'memo.create'}">
      <button class="btn btn-success">新規作成</button>
    </router-link>
  </div>
  <div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="">タイトル</th>
          <th class="">作成日</th>
          <th class="">内容</th>
          <th class=""></th>
        </tr>
      </thead>
    </table>
  </div>
  <div>ページネーション</div>
</div>

</template>

<script>
    export default {}
</script>