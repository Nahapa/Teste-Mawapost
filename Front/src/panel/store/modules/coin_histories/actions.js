import axios from 'axios'

const RESOURCE = '/coin_histories'

const actions = {
    setCoinHistories({ commit }) {
        axios.get(RESOURCE)
            .then(response => {
                commit('SET_COIN_HISTORIES', response.data.data)
            })
    },

    newCoinHistory({ commit }, params) {
        axios.post(RESOURCE, params)
            .then(response => {
                commit('SET_COIN_HISTORY', response.data.data)
            })
    },

    deleteCoinHistory({ commit }, id) {
        axios.delete(`${RESOURCE}/${id}`)
            .then(() => {
                commit('DELETE_COIN_HISTORY', id)
            })
    }

}

export default actions