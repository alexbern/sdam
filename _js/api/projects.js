'use strict';
import fetch from 'isomorphic-fetch';
import {buildBody, checkStatus} from '../util';
import {basename} from '../globals/';

let base = `${basename}/api/projects`;

export const getProjects = () => {
  return fetch(`${base}`)
    .then(checkStatus);
};

export const getProjectById = (id) => {
  return fetch(`${base}/${id}`)
    .then(checkStatus);
};

export default {
  getProjects,
  getProjectById
};
