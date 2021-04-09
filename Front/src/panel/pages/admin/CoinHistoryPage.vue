<template>
  <div>
    <div class="m-5">
      <!-- HEADER CONTENT -->
      <div class="flex justify-between items-center my-5">
        <div class="text-theme-primary">Moedas</div>
        <div></div>
      </div>
      <!-- CONTENT -->
      <div>
        <div class="w-full">
          <div
            class="border border-theme-primary rounded shadow overflow-hidden"
          >
            <table class="w-full bg-white">
              <thead class="bg-theme-primary text-white">
                <tr>
                  <th
                    class="py-3 px-4 text-left uppercase font-semibold text-sm"
                  >
                    Nome
                  </th>
                  <th
                    class="py-3 px-4 text-left uppercase font-semibold text-sm"
                  >
                    Sigla
                  </th>
                  <th
                    class="py-3 px-4 text-left uppercase font-semibold text-sm"
                  >
                    Alta
                  </th>
                  <th
                    class="py-3 px-4 text-left uppercase font-semibold text-sm"
                  >
                    Baixa
                  </th>
                  <th
                    class="py-3 px-4 text-left uppercase font-semibold text-sm"
                  >
                    Compra
                  </th>
                  <th
                    class="py-3 px-4 text-left uppercase font-semibold text-sm"
                  >
                    Venda
                  </th>
                  <th
                    class="py-3 px-4 text-left uppercase font-semibold text-sm"
                  >
                    Data
                  </th>
                  <th
                    class="py-3 px-4 text-left uppercase font-semibold text-sm"
                  >
                    Ações
                  </th>
                </tr>
              </thead>
              <tbody class="text-gray-700">
                <tr
                  v-for="coinHistorie in getCoinHistoriesAll"
                  v-bind:key="coinHistorie.id"
                  class="odd:bg-white even:bg-theme-striped"
                >
                  <td class="py-3 px-4 text-left">{{ coinHistorie.name }}</td>
                  <td class="py-3 px-4 text-left">{{ coinHistorie.code }}</td>
                  <td class="py-3 px-4 text-left">{{ coinHistorie.high }}</td>
                  <td class="py-3 px-4 text-left">{{ coinHistorie.low }}</td>
                  <td class="py-3 px-4 text-left">{{ coinHistorie.bid }}</td>
                  <td class="py-3 px-4 text-left">{{ coinHistorie.ask }}</td>
                  <td class="py-3 px-4 text-left">
                    {{ coinHistorie.create_date }}
                  </td>
                  <td
                    class="flex justify-around py-3 px-4 text-left text-theme-secondary"
                  >
                    <i
                      v-on:click="deleteCoinHistory(coinHistorie.id)"
                      class="cursor-pointer fa fa-trash"
                    ></i>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";

export default {
  computed: {
    ...mapGetters(["getCoinHistoriesAll"]),
  },

  methods: {
    ...mapActions(["deleteCoinHistory"]),
  },

  mounted() {
    this.$store.dispatch("setCoinHistories");
  },
};
</script>