const { createApp } = Vue;

createApp({
  data() {
    return {
      products: [],
      ajout: 0,
    };
  },
  computed: {
    totalProducts() {
      return this.products.reduce((sum, product) => {
        // sum += product.quantity
        // return sum
        return sum + product.quantity;
      }, 0);
    },
    totalPrix() {
      return this.products.reduce((total, product) => {
        return total + product.count * product.prix;
      }, 0);
    },
  },

  created() {
    fetch("products.json")
      .then((response) => response.json())
      .then((json) => {
        this.products = json.products;
        //this.products = json
      });
  },
}).mount("#app");

createApp({
  data() {
    return {
      products: [],
    };
  },
  computed: {
    totalPrix() {
      return this.products.reduce((total, product) => {
        return totl + product.count * product.prix;
      }, 0);
    },
  },

  created() {
    fetch("products.json")
      .then((response) => response.json())
      .then((json) => {
        this.products = json.products;
      });
  },
}).mount("#add");
