import { createStore } from "vuex"

import auth from './modules/auth/auth'
import coin from './modules/coins/coin'
import coin_history from './modules/coin_histories/coin_history'
import form from './modules/forms/form'
import user from './modules/users/user'

const store = createStore({
    modules: {
        auth,
        coin,
        coin_history,
        form,
        user
    }
})

export default store