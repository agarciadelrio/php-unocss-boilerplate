String.prototype.capitalize = function() {
  return this[0].toUpperCase() + this.slice(1);
};

String.prototype.toCamelCase = function() {
  return this.replace(/[-|\s]([a-z])/g, (match, letter) => letter.toUpperCase());
};

String.prototype.toPascalCase = function() {
  return this.replace(/[-|\s]([a-z])/g, (match, letter) => letter.toUpperCase()).capitalize();
};

String.prototype.toSpaces = function() {
  return this.replace(/([A-Z])/g, (match, letter) => ` ${letter.toLowerCase()}`);
};

String.prototype.toKebabCase = function() {
  return this.replace(/([A-Z])/g, (match, letter) => `-${letter.toLowerCase()}`).slice(1);
};
