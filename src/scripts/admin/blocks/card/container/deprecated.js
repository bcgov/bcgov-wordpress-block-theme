/* eslint react/no-unknown-property: "off" */

import { attributes } from './attributes';
import { InnerBlocks } from '@wordpress/block-editor';
export const deprecated = [
    {
        attributes,
        save: (props) => {
            const {
                attributes: {
                    cardId,
                    backgroundColor,
                    firstBreakColumns,
                    firstBreak,
                    secondBreakColumns,
                    secondBreak,
                },
                className,
            } = props;

            return (
                <div>
                    <style jsx>
                        {`
                            #${cardId} {
                                background-color: ${backgroundColor};
                            }
                            @media (min-width: ${secondBreak}px) {
                                ul#${cardId} {
                                    -webkit-flex-direction: row;
                                    -moz-flex-direction: row;
                                    -ms-flex-direction: row;
                                    flex-direction: row;
                                    -webkit-flex-wrap: wrap;
                                    -moz-flex-wrap: wrap;
                                    -ms-flex-wrap: wrap;
                                    flex-wrap: wrap;
                                    flex-wrap: wrap;
                                }
                                ul#${cardId} > li {
                                    width: ${100 / secondBreakColumns - 1 * 2}%;
                                    margin: 1%;
                                }
                            }
                            @media (min-width: ${firstBreak}px) {
                                ul#${cardId} {
                                    -webkit-flex-direction: row;
                                    -moz-flex-direction: row;
                                    -ms-flex-direction: row;
                                    flex-direction: row;
                                    -webkit-flex-wrap: wrap;
                                    -moz-flex-wrap: wrap;
                                    -ms-flex-wrap: wrap;
                                    flex-wrap: wrap;
                                }
                                ul#${cardId} > li {
                                    width: ${100 / firstBreakColumns - 1 * 2}%;
                                    margin: 1%;
                                }
                            }
                        `}
                    </style>
                    <ul className={className} id={cardId}>
                        <InnerBlocks.Content />
                    </ul>
                </div>
            );
        },
    },
    {
        attributes,
        save: (props) => {
            const {
                attributes: {
                    cardId,
                    backgroundColor,
                    firstBreakColumns,
                    firstBreak,
                    secondBreakColumns,
                    secondBreak,
                },
                className,
            } = props;

            return (
                <div role="navigation">
                    <style jsx>
                        {`
                            #${cardId} {
                                background-color: ${backgroundColor};
                            }
                            @media (min-width: ${secondBreak}px) {
                                ul#${cardId} {
                                    -webkit-flex-direction: row;
                                    -moz-flex-direction: row;
                                    -ms-flex-direction: row;
                                    flex-direction: row;
                                    -webkit-flex-wrap: wrap;
                                    -moz-flex-wrap: wrap;
                                    -ms-flex-wrap: wrap;
                                    flex-wrap: wrap;
                                    flex-wrap: wrap;
                                }
                                ul#${cardId} > li {
                                    width: ${100 / secondBreakColumns - 1 * 2}%;
                                    margin: 1%;
                                }
                            }
                            @media (min-width: ${firstBreak}px) {
                                ul#${cardId} {
                                    -webkit-flex-direction: row;
                                    -moz-flex-direction: row;
                                    -ms-flex-direction: row;
                                    flex-direction: row;
                                    -webkit-flex-wrap: wrap;
                                    -moz-flex-wrap: wrap;
                                    -ms-flex-wrap: wrap;
                                    flex-wrap: wrap;
                                }
                                ul#${cardId} > li {
                                    width: ${100 / firstBreakColumns - 1 * 2}%;
                                    margin: 1%;
                                }
                            }
                        `}
                    </style>
                    <ul className={className} id={cardId}>
                        <InnerBlocks.Content />
                    </ul>
                </div>
            );
        },
    },
    {
        attributes,
        save: (props) => {
            const {
                attributes: {
                    cardId,
                    // backgroundColor,
                    // firstBreakColumns,
                    // firstBreak,
                    // secondBreakColumns,
                    // secondBreak,
                },
                className,
            } = props;

            return (
                <ul className={className} id={cardId}>
                    <InnerBlocks.Content />
                </ul>
            );
        },
    },
];
