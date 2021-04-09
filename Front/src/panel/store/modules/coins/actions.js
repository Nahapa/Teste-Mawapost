import axios from 'axios'

const RESOURCE = '/coins'

const actions = {
    setCoins({ commit }) {
        axios.get(RESOURCE)
            .then(response => {
                commit('SET_COINS', response.data.data)
            })
    },

}

export default actions