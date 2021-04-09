const mutations = {
    SET_COIN_HISTORIES(state, coinHistories) {
        state.coinHistories = coinHistories
    },

    SET_COIN_HISTORY(state, coinHistory) {
        state.coinHistories.push(coinHistory)
    },

    DELETE_COIN_HISTORY(state, id) {
        let index = state.coinHistories.findIndex(_coin_history => _coin_history.code == id)
        state.coinHistories.splice(index)
    }
}

export default mutations