export default {

	state: {
              selectedQuote: [],
	},

	getters: {
              getSelectedQuote(state){
                     return state.selectedQuote
              }
	},

	actions: {
              getQuoteOfTheDay(context){
                     axios.get("/quotes/quotd")
                     .then((response)=>{
                            context.commit("selectedQuote",response.data)
                     })
                     .catch(()=>{   
                            console.log("Error") 
                     })
              },
              getRandomQuote(context){
                     axios.get("/quotes/random")
                     .then((response)=>{
                            context.commit("selectedQuote",response.data)
                     })
                     .catch(()=>{   
                            console.log("Error") 
                     })
              }
	},

	mutations: {
              selectedQuote(state,data) {
                     return state.selectedQuote = data
              }
	}
}