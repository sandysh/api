const Foo = { template: '<div>foo</div>' }
const Bar = { template: '<div>bar</div>' }

export default[
  { path: '/', component: require('./components/Example.vue') },
  { path: '*' ,redirect: '/' },
  { path: '/foo', component: Foo },
  { path: '/bar', component: Bar }, 
]

// module.exports = [
//     {
//         path: '/',
//         component: require('./components/Example.vue'),
//             meta: {
//                     title: 'Home'
//         }
//     }
// ]
