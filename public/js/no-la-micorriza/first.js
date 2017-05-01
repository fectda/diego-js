var diegoJS = new Vue({
	el: '#main',
	data : {
		objects : main.objects,
		letters : main.letters,
		numbers : main.numbers,

		selected_letter: "",
		selected_digit: "",
		filter_array: main.objects,
		or: false

	},


	methods: {

		filterArray(){
			var selected_letter = this.selected_letter,
				selected_digit = this.selected_digit,
				and_or	= 	this.or;

			this.filter_array = this.objects.filter(function(object){

				var filter_letter = (selected_letter === "" ? true : (object.letter == selected_letter)) ;
				var filter_number = (selected_digit === "" ? true : (object.digit == selected_digit)) ;

				return  and_or ? (filter_letter || filter_number) : filter_letter && filter_number ;
			});
		},

		selectLetter(letter){
			this.selected_letter = letter;
		},

		selectDigit(digit){
			console.log(digit);
			this.selected_digit = digit;
		}

	}
})
