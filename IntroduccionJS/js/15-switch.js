/**
 * SWITCH
 */

const metodoPago = 'efectivo';

switch (metodoPago) {
    case 'tarjeta':
        console.log(`pagaste con ${metodoPago}`);
        break;
    case 'cheque':
        console.log(`pagaste con ${metodoPago}`);
        break;
    case 'efectivo':
        console.log(`pagaste con ${metodoPago}`);
        break;

    default:
        console.log('Aun no has pagado')
        break;
}

