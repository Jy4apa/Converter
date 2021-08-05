export default {
  props: {
    value: {
      type:    [Number, String, Object, Array, Boolean,],
      default: '',
    },
  },
  computed: {
    model: {
      get() {
        return this.value;
      },
      set(value) {
        this.$emit('input', value);
      },
    },
  },
  methods: {
    change(event) {
      this.model = event.target && event.target.value !== undefined ? event.target.value : event;
    },
  },
};
