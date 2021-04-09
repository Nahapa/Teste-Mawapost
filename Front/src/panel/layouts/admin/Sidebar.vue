<template>
  <div class="flex-none w-44 min-h-screen bg-layout-sidebar shadow-lg">
    <!-- Logo -->
    <router-link to="/">
      <div class="flex justify-center items-center h-28">
        <img src="@/panel/assets/images/logo.png" alt="logo" width="120" />
      </div>
    </router-link>
    <!-- Menu -->
    <div>
      <ul>
        <li class="h-10">
          <router-link
            v-bind:to="{ name: 'home' }"
            exact-active-class="bg-theme-primary bg-opacity-10 border-l-4 border-theme-primary"
            class="flex items-center w-full h-full px-5"
          >
            <i class="fa fa-home text-theme-primary"></i>
            <span class="text-theme-primary ml-5">Home</span>
          </router-link>
        </li>
        <li class="h-10">
          <router-link
            v-bind:to="{ name: 'coin' }"
            active-class="bg-theme-primary bg-opacity-10 border-l-4 border-theme-primary"
            class="flex items-center w-full h-full px-5"
          >
            <i class="fa fa-coins text-theme-primary"></i>
            <span class="text-theme-primary ml-5">Moedas</span>
          </router-link>
        </li>
        <li class="h-10">
          <router-link
            v-bind:to="{ name: 'coin_history' }"
            active-class="bg-theme-primary bg-opacity-10 border-l-4 border-theme-primary"
            class="flex items-center w-full h-full px-5"
          >
            <i class="fa fa-history text-theme-primary"></i>
            <span class="text-theme-primary ml-5">Histórico</span>
          </router-link>
        </li>
        <li class="h-10">
          <router-link
            v-bind:to="{ name: 'user' }"
            active-class="bg-theme-primary bg-opacity-10 border-l-4 border-theme-primary"
            class="flex items-center w-full h-full px-5"
          >
            <i class="fa fa-user text-theme-primary"></i>
            <span class="text-theme-primary ml-5">Usuários</span>
          </router-link>
        </li>
        <li class="h-10">
          <a
            v-on:click="exit()"
            class="flex items-center w-full h-full px-5 cursor-pointer"
          >
            <i class="fa fa-reply text-theme-primary"></i>
            <span class="text-theme-primary ml-5">Sair</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
import { mapActions } from "vuex";
export default {
  methods: {
    ...mapActions(["logout"]),
    exit() {
      this.logout().finally(() => this.$router.push({ name: "login" }));
    },
  },
};
</script>