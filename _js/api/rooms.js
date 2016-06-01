'use strict';
import fetch from 'isomorphic-fetch';
import {buildBody, checkStatus} from '../util';
import {basename} from '../globals/';

let base = `${basename}/api/rooms`;

export const getRooms = () => {
  return fetch(`${base}`)
    .then(checkStatus);
};

export default {
  getRooms
};
