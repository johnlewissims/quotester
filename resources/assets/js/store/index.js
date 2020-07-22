export default {

	state: {
       category: ['Hello', 'World']
	},

	getters: {
       getCategoryFormGetters(state){
          return state.category
       }
	},

	actions: {
       allCategoryFromDatabase(context){
            console.log('hello world')
        //   axios.get("api/category")
        //        .then((response)=>{
        //           console.log(response.data.categories)
        //           context.commit("categories",response.data.categories)
        //        })
        //        .catch(()=>{   
        //           console.log("Error") 
        //        })
       }
	},

	mutations: {
       categories(state,data) {
          return state.category = data
       }
	}
}