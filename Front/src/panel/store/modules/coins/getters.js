const getters = {
    getCoinsAll(state) {
        return state.coins
    },

    getCoinByCode: (state) => (code) => {
        return state.coins.find(coin => coin.code == code)
    }
}

export default getters