import { addSafeEventListener } from '../../src/scripts/public/utils';
const mockListener = jest.fn();

/**
 * Tests for the addSafeEventListener function.
 *
 * Each test case covers a specific scenario, including adding an event listener, logging warnings for invalid
 * EventTargets, and handling cases where the element is null or does not support the addEventListener method.
 *
 * @function
 */
describe( 'addSafeEventListener', () => {
    beforeEach( () => {
        jest.clearAllMocks();
    } );

    // Test case for adding event listener
    test( 'should add event listener when el is a valid EventTarget', () => {
        const mockElement = {
            addEventListener: mockListener,
        };

        addSafeEventListener( mockElement, 'click', jest.fn(), {
            capture: true,
        } );

        expect( mockListener ).toHaveBeenCalledWith(
            'click',
            expect.any( Function ),
            {
                capture: true,
            }
        );
    } );

    // Test case for logging a warning when el is not a valid EventTarget
    test( 'should log a warning when el is not a valid EventTarget', () => {
        const consoleWarnSpy = jest
            .spyOn( console, 'warn' )
            .mockImplementation( () => {} );

        const invalidElement = {};

        addSafeEventListener( invalidElement, 'click', jest.fn(), {
            capture: true,
        } );

        expect( consoleWarnSpy ).toHaveBeenCalledWith(
            'el is not a valid EventTarget or does not support addEventListener'
        );

        consoleWarnSpy.mockRestore();
    } );

    // Test case for logging a warning when el is null
    test( 'should log a warning when el is null', () => {
        const consoleWarnSpy = jest
            .spyOn( console, 'warn' )
            .mockImplementation( () => {} );

        addSafeEventListener( null, 'click', jest.fn(), { capture: true } );

        expect( consoleWarnSpy ).toHaveBeenCalledWith(
            'el is not a valid EventTarget or does not support addEventListener'
        );

        consoleWarnSpy.mockRestore();
    } );

    // Test case for logging a warning when el does not have addEventListener method
    test( 'should log a warning when el does not support addEventListener', () => {
        const consoleWarnSpy = jest
            .spyOn( console, 'warn' )
            .mockImplementation( () => {} );

        const invalidElement = { addEventListener: undefined };

        addSafeEventListener( invalidElement, 'click', jest.fn(), {
            capture: true,
        } );

        expect( consoleWarnSpy ).toHaveBeenCalledWith(
            'el is not a valid EventTarget or does not support addEventListener'
        );

        consoleWarnSpy.mockRestore();
    } );
} );
