<template>
<ul class="list-group list-group-flush list-unstyled">
    <li href="#" v-for="user in users" :key="user.id">
        <img class="avatar" :src="user.avatar" :alt="user.name">
    </li>
</ul>
</template>

<script>
export default {
    props: ['users']
};
</script>
