export default {

	state: {
              quotes: [],
              selectedQuote: [],
	},

	getters: {
              getQuotes(state){
                     return state.quotes
              },
              getSelectedQuote(state){
                     return state.selectedQuote
              }
	},

	actions: {
              getAllQuotes(context){
                     axios.get("/quotes/")
                     .then((response)=>{
                            context.commit("quotes",response.data)
                     })
                     .catch(()=>{   
                            console.log("Error") 
                     })
              },
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
              quotes(state,data) {
                     return state.quotes = data
              },
              selectedQuote(state,data) {
                     return state.selectedQuote = data
              }
	}
}