import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-number-plus', IndexField)
  app.component('detail-number-plus', DetailField)
  app.component('form-number-plus', FormField)
})
