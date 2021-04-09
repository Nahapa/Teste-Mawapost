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
                  v-for="coin in getCoinsAll"
                  v-bind:key="coin.code"
                  class="odd:bg-white even:bg-theme-striped"
                >
                  <td class="py-3 px-4 text-left">{{ coin.name }}</td>
                  <td class="py-3 px-4 text-left">{{ coin.code }}</td>
                  <td class="py-3 px-4 text-left">{{ coin.high }}</td>
                  <td class="py-3 px-4 text-left">{{ coin.low }}</td>
                  <td class="py-3 px-4 text-left">{{ coin.bid }}</td>
                  <td class="py-3 px-4 text-left">{{ coin.ask }}</td>
                  <td class="py-3 px-4 text-left">{{ coin.create_date }}</td>
                  <td
                    class="flex justify-around py-3 px-4 text-left text-theme-secondary"
                  >
                    <i
                      v-on:click="save(coin.code)"
                      class="cursor-pointer fa fa-save"
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
    ...mapGetters(["getCoinsAll", "getCoinByCode"]),
  },

  methods: {
    ...mapActions(["newCoinHistory"]),

    save(code) {
      this.newCoinHistory(this.getCoinByCode(code));
    },
  },

  mounted() {
    this.$store.dispatch("setCoins");
  },
};
</script>