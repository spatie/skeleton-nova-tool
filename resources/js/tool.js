Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: '{{ component }}',
            path: '/{{ component }}',
            component: require('./components/Tool'),
        },
    ])
})
