export const postData = async(url, data) => {
  let response = null;
  let isError = false;

  try{
    response = await fetch(url, {
      method: 'post',
      body: data
    });

    if(response.status === 200) {
      response = await response.json();
    } else {
      isError = true;
    }
  } catch(err) {
    isError = true;
  }

  return {response, isError};
}