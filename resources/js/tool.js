Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'NovaTool',
            path: '/NovaTool',
            component: require('./components/Tool'),
        },
    ])
})
