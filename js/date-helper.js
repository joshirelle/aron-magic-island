const isWeekend = (day) => {
    return day % 7 === 1 || day % 7 === 0;
};

export { isWeekend };