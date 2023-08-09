import { addSafeEventListener } from '../src/scripts/public/utils';

describe('addSafeEventListener', () => {
    test('adds event listener to a DOM element', () => {
        const mockElement = document.createElement('div');
        const mockListener = jest.fn();

        addSafeEventListener(mockElement, 'click', mockListener);

        mockElement.dispatchEvent(new Event('click'));

        expect(mockListener).toHaveBeenCalledTimes(1);
    });

    test('adds event listener to an object with "on" method', () => {
        const mockObject = {
            on: jest.fn(),
        };
        const mockListener = jest.fn();

        addSafeEventListener(mockObject, 'customEvent', mockListener);

        expect(mockObject.on).toHaveBeenCalledWith('customEvent', mockListener);
    });

    test('does nothing for invalid target', () => {
        const invalidTarget = 'invalidTarget';
        const mockListener = jest.fn();

        // Since the function does nothing for invalid targets, mockListener should not be called
        addSafeEventListener(invalidTarget, 'click', mockListener);

        expect(mockListener).not.toHaveBeenCalled();
    });
});
