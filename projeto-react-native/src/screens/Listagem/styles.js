import { StyleSheet } from 'react-native';

const corAzul = '#1E90FF';

export default StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    padding: 16,
  },

  contentTop: {
    width: '100%',
    justifyContent: 'center',
    alignItems: 'center',
    borderBottomWidth: 0.3,
    borderBottomColor: corAzul,
    marginBottom: 8,
  },

  text: {
    color: corAzul,
    fontSize: 22,
  },

  button: {
    width: '80%',
    marginRight: 'auto',
    marginLeft: 'auto',
    height: 40,
    marginTop: 16,
    backgroundColor: corAzul,
    alignItems: 'center',
    justifyContent: 'center',
    borderRadius: 4,
  },

  titleButton: {
    color: '#FFF',
    fontSize: 16,
    fontWeight: 'bold',
  },

  image: {
    width: 200,
    height: 200,
  },
});
