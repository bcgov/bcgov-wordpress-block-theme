const { registerBlockStyle } = wp.blocks;

const styles = [
    {
        name: 'dropshadow',
        label: 'Drop shadow',
        isDefault: true,
    },
    {
        name: 'default',
        label: 'No Shadow',
    },
];

styles.forEach( ( style ) => {
    registerBlockStyle( 'core/query', style );
} );
