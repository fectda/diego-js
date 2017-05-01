// contador

class Counter {
	constructor(value) {
      this.value = value;
    }
};


Counter.prototype.count = function() {
	this.value+=1;
};


var simpleCounter = Vue.component('simple-counter', {
	template: '#simple-counter-template',
	props : ["value"],
	data: function () {
		return {
			counter: new Counter(this.value),
		}
	},

	methods: {
		count() {
			this.counter.count();
			// this.value = this.counter.value;
		},
	}

})


var post = Vue.component('post', {
	template: '#post-template',
	props : ["colors","post"],
	data: function () {
		return {
			current_post: this.post,
			// current_colors: this.colors.filter(function(pallet){
			// 	return this.current_post.id == pallet.id;
			// }),
		}
	},

	methods: {
		selectThisColors(color_id) {
			this.current_post.color_id = color_id;
		},
	}

})

var diegoJS = new Vue({
	el: '#main',
	data : {
		counters : main.counters,
		colors : main.colors,
		posts : main.posts,
	},

	methods:{
		addCounter(){
			var value = document.getElementById("count_init").value;
			this.counters.push(value == parseInt(value,10) ? parseInt(value,10) : 0);
		}
	},

	components: {
	  // <my-component> will only be available in parent's template
	  'simple-counter': simpleCounter
	}
});
